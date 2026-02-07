<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactInquiryNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function products()
    {
        return view('frontend.products');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function product($slug)
    {
        $productViews = [
            'super-pulse-co2' => 'frontend.product-1',
            'salmon-dna-serum' => 'frontend.product-2',
            'skin-control-mask' => 'frontend.product-3',
            'revital-cream' => 'frontend.product-4',
        ];

        if (isset($productViews[$slug])) {
            return view($productViews[$slug]);
        }

        abort(404);
    }

    /**
     * Save contact form inquiry to database and send email.
     */
    public function storeContactInquiry(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'mobile' => 'required|string|max:20',
            'brand' => 'nullable|string|max:255',
            'date' => 'nullable|date',
            'query' => 'nullable|string|max:5000',
        ]);

        $redirect = function ($success, $message) use ($request) {
            $base = $request->getSchemeAndHttpHost();
            $url = $request->filled('return_to') && str_starts_with($request->return_to, $base)
                ? $request->return_to
                : url()->previous();
            return redirect()->to($url)->with($success ? 'success' : 'error', $message);
        };

        try {
            DB::table('contact_inquiries')->insert([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'mobile' => $validated['mobile'],
                'brand' => $validated['brand'] ?? null,
                'preferred_date' => isset($validated['date']) ? $validated['date'] : null,
                'query' => $validated['query'] ?? null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } catch (\Throwable $e) {
            report($e);
            return $redirect(false, 'Inquiry save failed. Please try again or contact us directly.');
        }

        try {
            Mail::to('thestackanalysis@gmail.com')->send(new ContactInquiryNotification($validated));
        } catch (\Throwable $e) {
            report($e);
        }

        return $redirect(true, 'Your inquiry has been submitted successfully.');
    }
}
