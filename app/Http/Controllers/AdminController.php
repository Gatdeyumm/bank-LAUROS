<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function index() {
        return inertia('Admin/Index');
    }

    public function sendMailToAllClients(Request $request) {
        // dd($request);
        $emails = Client::pluck('email');

        if($request->message != null && $request->subject != null) {
            $subject = $request->subject;
            $content = $request->message;

            foreach($emails as $e) {

                Mail::send('email.bulk-mail', ['content' => $content], function($message) use ($subject, $e) {
                    $message->to($e);
                    $message->subject($subject);
                });
            }
        } else {
            return back()->with('error', 'Fields cannot be empty!');
        }

        

        return back()->with('info', 'Message has been sent to all clients!');
    }
}