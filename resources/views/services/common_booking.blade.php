<style>
a {
    color: #fff;
    text-decoration: none;
}
</style>

{{-- common_booking.blade.php --}}
<section class="booking-section" style="background-color: #f7f7f7; padding: 30px 20px; border-radius: 10px; margin-bottom: 40px;">
    <div class="container" style="text-align: center;">
        <h2 style="font-size: 28px; font-weight: bold; color: #333; margin-bottom: 10px;">🔔 Booking</h2>
        <p style="font-size: 16px; color: #555; margin-bottom: 25px;">
            সার্ভিসটি নিতে এখনই পেমেন্ট করে বুকিং করুন।
        </p>
        <button class="eurozoom-btn ez-submit"><a href="{{ url('/booking') }}"> Book Now</a> </button>
    </div>
</section>
