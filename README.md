[![Published on webcomponents.org](https://img.shields.io/badge/webcomponents.org-published-blue.svg)](https://www.webcomponents.org/element/owner/my-element)

# split-upload
TODO: Write a project description

## Installation
TODO: Describe the installation process

## Usage

header

```
    <link rel="import" href="../bower_components/paper-button/paper-button.html">
    <link rel="import" href="../bower_components/split-upload/split-upload.html">
```


following

```
...

    <upload-split id="uploadSplit" url="http://[...]/">
        <button onClick="choice()">choice</button>
        <button onClick="upload()">upload</button>
    </upload-split>
    
    <script>
        function choice () {
            const split = document.getElementById ('uploadSplit');
            split.choiceButtonClick ();
        }
    
        function upload () {
            const split = document.getElementById ('uploadSplit');
            split.uploadButtonClick ();
        }
    </script>
```
