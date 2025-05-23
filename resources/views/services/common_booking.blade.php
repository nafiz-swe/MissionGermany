{{-- common_booking.blade.php --}}
<style>
.book-now-btn {
    display: inline-block;
    background: linear-gradient(135deg, #0052cc, #00c6ff);
    color: white;
    padding: 12px 30px;
    font-size: 16px;
    border-radius: 8px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.book-now-btn:hover {
    background: linear-gradient(135deg, #0041a8, #00b3e6);
    box-shadow: 0 5px 15px rgba(0, 82, 204, 0.4);
}
</style>

<section class="booking-section" style="background-color: #f7f7f7; padding: 30px 20px; border-radius: 10px; margin-bottom: 40px;">
    <div class="container" style="text-align: center;">
        <h2 style="font-size: 28px; font-weight: bold; color: #333; margin-bottom: 10px;">🔔 Booking</h2>
        <p style="font-size: 16px; color: #555; margin-bottom: 25px;">
            সার্ভিসটি নিতে এখনই পেমেন্ট করে বুকিং করুন।
        </p>
        <a href="{{ url('/booking') }}" class="book-now-btn"> 📥 Book Now</a>
    </div>
</section>
