{*HTML ����� ��� add/edit.inc.php*}

<style>
    #addButton{
        display: none;
    }
    #publishButton{
        display: inline-block;
    }
    #cancelButton{
        display: inline-block;
    }
</style>
<div class="create_news">
    <form action=" " method="post" id = "addNews">
        <label class="field__label">��������� ������:</label>
        <div class="field__desc">����������� ��������� ���, ��� ������ ����� ��������, ��� �� ��� ����.</div>
        <input type="text" name="title" value="{$itemvar["title"]}" required />
        <label class="field__label">����� ������:</label>
        <div class="field__desc">�������,�� �������.</div>
        <textarea name="body" cols="50" rows="5" required><?{$itemvar["body"]}?></textarea>
        <label class="field__label">����:</label>
        <div class="field__desc">������ ����.</div>
        <input type="date" name="calendar" value="<{$itemvar["dt"]}?>" required />
    </form>
</div>