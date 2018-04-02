<form action="../index.php" method="post">
    <h1>Contact me</h1>

    <fieldset>
        <legend><span class="number">1</span>Your Information</legend>
        <label for="name">Name:</label>
        <input type="text" id="name" name="user_name" placeholder="e.g. Emmanuel Nggadas" required>

        <label for="mail">Email:</label>
        <input type="email" id="mail" name="user_email" placeholder="e.g. email@example.com" required>

        <label for="website">Website:</label>
        <input type="url" id="website" name="website" placeholder="e.g. website.com">
    </fieldset>

    <fieldset>
        <legend><span class="number">2</span>Your message</legend>
        <label for="name">Topic:</label>
        <input type="text" id="topic" name="topic" placeholder="e.g. build a website" required>

        <label for="message">Message:</label>
        <textarea id="message" rows="10"></textarea>
    </fieldset>

    <button type="submit">Send</button>
</form>