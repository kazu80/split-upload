[![Published on webcomponents.org](https://img.shields.io/badge/webcomponents.org-published-blue.svg)](https://www.webcomponents.org/element/owner/my-element)

### Inline Demo

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
            <upload-split
                    id="uploadSplit"
                    url="http://localhost/"
                    send-count={{sendCount}}
                    send-count-max={{sendCountMax}}
            >
                uploaded count : [[sendCount]]<br>
                upload count : [[sendCountMax]]<br>
                
                <button on-click="choice">choice file</paper-button>
                <button on-click="btnClick">upload</button>
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

# :smiley_cat: split-upload
This is polymer element to split and upload large file :clap:

## Installation
```
$ bower install --save monkick/split-upload
```

## Usage

At first. Import it at header.  
At the same time. Import `paper-button` at header.  

```html
    <link rel="import" href="../bower_components/split-upload/split-upload.html">
    <link rel="import" href="../bower_components/paper-button/paper-button.html">
```

Next. Add the `upload-split` custom tag in body.  
:scream_cat: I'm sorry. The custom tag name is not same file name...  

```html
    <upload-split id="uploadSplit" url="..."></upload-split>
```

The `url` argument is destination of upload. The upload url write here.  
  
Next. Add twice buttons in `upload-split` tag for choice and execute.  
The `upload-split` tag has methods for file choose and file upload.  

```html
    <upload-split id="uploadSplit" url="/foo/bar.php">
        <button onClick="choice()">choice</button>
        <button onClick="upload()">upload</button>
    </upload-split>
```

Next. Add script tag in body.  
Write some code for choose file and file upload.  

```
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
  
`choiceButtonClick` is choose file method.  
`uploadButtonClick` is upload file method.  
  
That's all :tada:

## Feature

Content-Type use application/octet-stream  
Split size is 5MB.  

## parameter
 
sendCount : sent count  
sendCountMax : send count  
  
Use like this  

```html
    <upload-split id="uploadSplit" url="http://[...]/">
        sent count : [[sendCount]] / [[sendCountMax]]
        
        <button onClick="choice()">choice</button>
        <button onClick="upload()">upload</button>
    </upload-split>
```