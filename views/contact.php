<div class="mx-4">
    <h1>Contact</h1>
    <form method="post" style="max-width: 500px;">
        <div class="mb-3 mt-4">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" name="subject" class="form-control" id="subject" aria-describedby="subject">

        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea name="body" style="height: 150px;" class="form-control" id="body"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>