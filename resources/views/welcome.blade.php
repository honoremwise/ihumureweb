<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>News Website - Submit Article</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .editor-container {
            display: flex;
            flex-direction: column;
            width: 80%;
            max-width: 800px;
            background: white;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .toolbar {
            background-color: #f0f0f0;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
        }
        .toolbar button {
            background: none;
            border: none;
            cursor: pointer;
            padding: 5px 10px;
            margin: 0 5px;
            font-size: 16px;
        }
        .toolbar input[type="file"] {
            display: none;
        }
        .editor {
            flex: 1;
            padding: 10px;
            min-height: 300px;
            max-height: 500px;
            overflow-y: auto;
            outline: none;
            font-size: 16px;
        }
        .submit-button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            margin: 10px;
            align-self: flex-end;
        }
        .input-field {
            margin-bottom: 15px;
        }
        .input-field label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .input-field input, .input-field textarea, .input-field select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }
        .featured-image-container {
            position: relative;
            display: inline-block;
        }
        .featured-image-container img {
            max-width: 100%;
            height: auto;
            margin: 10px 0;
        }
        .featured-image-container .cancel-icon {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            cursor: pointer;
            font-size: 20px;
            border-radius: 50%;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <div class="editor-container">
        <div class="input-field">
            <label for="title">Title</label>
            <input type="text" id="title" placeholder="Enter article title">
        </div>
        <div class="input-field">
            <label for="category">Category</label>
            <select id="category">
                <option value="sport">Sport</option>
                <option value="politics">Politics</option>
                <option value="tourism">Tourism</option>
                <option value="music">Music</option>
            </select>
        </div>
        <div class="input-field">
            <label for="featured_image">Featured Image</label>
            <input type="file" id="featured_image" onchange="previewFeaturedImage()">
        </div>
        <div class="toolbar">
            <button type="button" onclick="formatText('bold')">Bold</button>
            <button type="button" onclick="formatText('italic')">Italic</button>
            <button type="button" onclick="formatText('underline')">Underline</button>
            <button type="button" onclick="formatText('insertUnorderedList')">Bullet List</button>
            <button type="button" onclick="formatText('insertOrderedList')">Numbered List</button>
            <button type="button" onclick="insertLink()">Insert Link</button>
            <input type="file" id="imageUpload" onchange="previewImage()">
            <button type="button" onclick="document.getElementById('imageUpload').click()">Upload Image</button>
        </div>
        <div class="editor" contenteditable="true"></div>
        <button class="submit-button" onclick="submitContent()">Submit</button>
    </div>

    <script>
        function formatText(command) {
            document.execCommand(command, false, null);
        }

        function previewImage() {
            var file = document.getElementById('imageUpload').files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                var img = document.createElement('img');
                img.src = e.target.result;
                img.style.maxWidth = "100%";
                img.style.height = "auto";
                img.style.margin = "10px 0";
                document.querySelector('.editor').appendChild(img);
                uploadImage(file);
            };

            reader.readAsDataURL(file);
        }

        function previewFeaturedImage() {
            var file = document.getElementById('featured_image').files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                var container = document.querySelector('.featured-image-container');
                if (container) {
                    container.querySelector('img').src = e.target.result;
                } else {
                    container = document.createElement('div');
                    container.classList.add('featured-image-container');

                    var img = document.createElement('img');
                    img.src = e.target.result;

                    var cancelIcon = document.createElement('button');
                    cancelIcon.classList.add('cancel-icon');
                    cancelIcon.innerHTML = '&times;';
                    cancelIcon.onclick = removeFeaturedImage;

                    container.appendChild(img);
                    container.appendChild(cancelIcon);
                    document.querySelector('.editor-container').insertBefore(container, document.querySelector('.toolbar'));
                }
            };

            reader.readAsDataURL(file);
        }

        function removeFeaturedImage() {
            var container = document.querySelector('.featured-image-container');
            if (container) {
                container.remove();
                document.getElementById('featured_image').value = "";
            }
        }

        function uploadImage(file) {
            var formData = new FormData();
            formData.append('image', file);

            fetch('upload_image.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    var imgs = document.querySelectorAll('.editor img');
                    var lastImg = imgs[imgs.length - 1];
                    lastImg.src = data.url;
                } else {
                    alert('Image upload failed');
                }
            })
            .catch(error => console.error('Error:', error));
        }

        function insertLink() {
            var url = prompt("Enter the URL:");
            var text = prompt("Enter the text to display:");
            if (url && text) {
                var link = `<a href="${url}" target="_blank">${text}</a>`;
                document.execCommand('insertHTML', false, link);
            }
        }

        function submitContent() {
            var title = document.getElementById('title').value;
            var category = document.getElementById('category').value;
            var featuredImage = document.getElementById('featured_image').files[0];
            var editorContent = document.querySelector('.editor').innerHTML;
            var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            var formData = new FormData();
            formData.append('title', title);
            formData.append('category', category);
            formData.append('featured_image', featuredImage);
            formData.append('contents', editorContent);

            // Logging FormData for debugging purposes
            formData.forEach((value, key) => {
                console.log(key, value);
            });

            fetch('/new-article', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': token
                },
                body: formData
            })
            .then(response => {
                if (response.ok) {
                    return response.json();
                }
                throw new Error('Network response was not ok.');
            })
            .then(data => {
                if (data.success) {
                    alert(data.message);
                } else {
                    alert('Failed to save the article.');
                }
            })
            .catch(error => console.error('Error:', error));
        }
    </script>
</body>
</html>
