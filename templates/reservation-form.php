<div class="reservation-info">
    <form class="reservation-form" method="post">
        <h2>Make a Reservation</h2>
            <div class="field">
                <input type="text" name="name" placeholder="Name" required>
            </div>
            <div class="field">
                <input type="datetime-local" name="date" placeholder="Date" step="300" required>
            </div>
            <div class="field">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="field">
                <input type="tel" name="phone" placeholder="Phone Number" required>
            </div>
            <div class="field">
                <textarea name="message" placeholder="Message" required></textarea>
            </div>
            <div class="g-recaptcha" data-sitekey="6Lf3JIcUAAAAANLDWwFdqxVkYzi88p1rdLv6du5T"></div>
            <input type="submit" name="reservation" class="button" value="Send">
            <input type="hidden" name="hidden" value="1">
    </form>
</div>