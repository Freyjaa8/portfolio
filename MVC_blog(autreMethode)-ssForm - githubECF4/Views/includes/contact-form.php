<form action="#" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="name" class="form-label">Nom</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= (isset($creation->title)) ? $creation->title : NULL ?>">
    </div>
    <div class="mb-3">
        <label for="firstname" class="form-label">firstname</label>
        <input type="text" class="form-control" id="firstname" name="firstname">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="subject" class="form-label">Sujet du message</label>
        <select name ="subject" id="subject">
            <option value="">choisissez une option</option>
            <option value="collab">Proposition de collaboration</option>
            <option value="mission">Offre de mission / freelance</option>
            <option value="remarque">Remarques ou retours sur le portfolio</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Votre message : </label>
        <textarea name="message" id="message" cols="30" rows="6"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>