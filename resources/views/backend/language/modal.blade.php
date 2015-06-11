<form role="form">
    <div class="box-body">
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" class="form-control" id="code" placeholder="Enter code" value="{{ $language->code }}">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" value="{{ $language->name }}">
        </div>
        <div class="form-group">
            <label for="order">Order</label>
            <input type="text" class="form-control" id="order" placeholder="Enter order" value="{{ $language->order }}">
        </div>
    </div>
</form>
