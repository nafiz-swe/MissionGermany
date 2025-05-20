<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us - MissionGermany</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .contact-section {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #f9f9f9;
            border-radius: 10px;
        }

        .contact-section h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .contact-form label {
            font-weight: bold;
            margin-top: 15px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-form button {
            margin-top: 20px;
            width: 100%;
        }
    </style>
</head>
<body>

    {{-- Navigation --}}
    @include('navbar')

    {{-- Contact Form --}}
    <div class="contact-section">
        <h2>Contact Us</h2>

        {{-- Success Alert --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form class="contact-form" method="POST" action="{{ route('contact.send') }}">
            @csrf

            <label for="name">Your Name</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Your Email</label>
            <input type="email" name="email" id="email" required>

            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" required>

            <label for="message">Your Message</label>
            <textarea name="message" id="message" rows="5" required></textarea>

            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>

    {{-- Footer --}}
    @include('layouts.footer')

    {{-- Bootstrap JS (Optional) --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




<!-- 
Laravel Contact Form Project - Step by Step Documentation

Step 1: Laravel Project Setup
Laravel ইনস্টল করো এবং প্রজেক্ট ডিরেক্টরি তৈরি করো।
Local development সার্ভার চালু করো (e.g., php artisan serve)।


Step 2: Database Configuration
.env ফাইলে তোমার ডাটাবেস সেটিংস আপডেট করো:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=missiongermany
DB_USERNAME=root
DB_PASSWORD=your_password
ডাটাবেস missiongermany তৈরি করো (MySQL বা phpMyAdmin থেকে)।


Step 3: Migration Create করা
কমান্ড চালাও:
php artisan make:migration create_contacts_table --create=contacts
database/migrations/xxxx_xx_xx_create_contacts_table.php ফাইল এডিট করো:

public function up(): void
{
    Schema::create('contacts', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email');
        $table->string('subject');
        $table->text('message');
        $table->timestamps();
    });
}


Step 4: Migration Run করা
টার্মিনালে রান করো:
php artisan migrate
এর ফলে contacts টেবিল ডাটাবেসে তৈরি হবে।


Step 5: Model তৈরি (Optional)
যদিও সরাসরি Controller এ কাজ করা যায়, তবে ভালো practice মডেল তৈরি করা:
php artisan make:model Contact
app/Models/Contact.php ফাইলে প্রপার্টি সেট করতে পারো।


Step 6: Controller তৈরি
Contact ফর্মের জন্য Controller তৈরি করো:
php artisan make:controller ContactController
Controller এ ফর্ম ডাটা ভ্যালিডেশন ও ডাটাবেসে সেভ করার কোড লিখো:

public function send(Request $request)
{
    $request->validate([
        'name'    => 'required|string|max:255',
        'email'   => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    \App\Models\Contact::create([
        'name'    => $request->name,
        'email'   => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
    ]);

    return back()->with('success', 'Thank you for contacting us!');
}


Step 7: Route সেটআপ
routes/web.php ফাইলে রাউট যুক্ত করো:

use App\Http\Controllers\ContactController;

Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');


Step 8: Blade View তৈরি
resources/views/contact.blade.php ফাইল তৈরি করো এবং নিচের কোড লিখো (navbar ও footer include করো):

@include('navbar')

<div class="contact-section">
    <h2>Contact Us</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('contact.send') }}">
        @csrf
        <label for="name">Your Name</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Your Email</label>
        <input type="email" name="email" id="email" required>

        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" required>

        <label for="message">Your Message</label>
        <textarea name="message" id="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
    </form>
</div>

@include('layouts.footer') -->