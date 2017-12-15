<form action="/posts/?create" method="post" id="postCreate">
    <input type="text" name="title" id="title" tabindex="1" value="">
    <input type="hidden" name="category_id" value="1">
    <div class="btn-group" id="toolbar">
        <button type="button" id="h2" onclick="editor(this.id)">h2</button>
        <button type="button" id="h3" onclick="editor(this.id)">h3</button>
        <button type="button" id="italic" onclick="editor(this.id)">i</button>
        <button type="button" id="insertOrderedList" onclick="editor(this.id)">ol</button>
        <button type="button" id="insertUnorderedList" onclick="editor(this.id)">ul</button>
        <button type="button" id="justifyCenter" onclick="editor(this.id)">center</button>
        <button type="button" id="InsertImage" onclick="editor(this.id)">img</button>
        <button type="button" id="CreateLink" onclick="editor(this.id)">a</button>
        <button type="button" id="CreateTable" onclick="editor(this.id)">table</button>
        <button type="button" id="html" onclick="editor(this.id)">html</button>
    </div>
    <div class="well" id="editor" contenteditable="true" tabindex="2"></div>
    <input type="hidden" name="content" id="content">
    <select name="online">
        <option value="1" selected>Online</option>
        <option value="0" selected>Offline</option>
    </select>
    <input type="submit" value="Criar artigo" tabindex="3">
</form>
<script src="/file/js/main.js"></script>
<script src="/file/js/jquerylight.js"></script>
<script type="text/javascript">
$(function(){
    $('#title').focus();
    $('#postCreate').on('submit',function(){
        if(!showSource){
            editor('html');
        }
        $('#content').attr('value', $('#editor').html());
    });
});
</script>
