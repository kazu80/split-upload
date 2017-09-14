[![Published on webcomponents.org](https://img.shields.io/badge/webcomponents.org-published-blue.svg)](https://www.webcomponents.org/element/owner/my-element)

<!--
```
<custom-element-demo>
  <template>
    <link rel="import" href="./split-upload.html">
    <next-code-block></next-code-block>
  </template>
</custom-element-demo>
```
-->

```html
<link rel="import" href="./split-upload.html">
```

# <split-upload>
This is polymer element to upload file for big file.

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
