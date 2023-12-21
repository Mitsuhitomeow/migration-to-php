<div class="modal">
  <div class="modal-content">

    <form
      action="../components/card.php"
      class="form"
      method="post"
      enctype="multipart/form-data"
    >

      <fieldset>

        <legend>Form</legend>

        <div class="form_content">
          <label for="input_title">Title</label>
          <input name="input_title" class="input_title" type="text" required>
          <label for="input_image">Image</label>
          <input name="input_image" class="input_image" type="file" required>

          <div class="checkbox_container">
            <label for="input_checkbox">Available</label>
            <input name="input_checkbox" class="input_checkbox" type="checkbox">
          </div>

          <input type="submit" class="input_button">
        </div>

      </fieldset>
    </form>

  </div>
</div>