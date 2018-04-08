<div class="container">
    <div class="row">
        <div>
            <h1>Edit an accessory</h1>
        </div>
    </div>

    <div>
        <form action="/Maintenance/Finalize" method="post">
            <input type="hidden" name="id" value="" />
            <div class="form-group">
                <label for="addHelm">Helm</label>
                <select name="h" id="addHelm" class="form-control">
                    <option selected></option>
                    {accessory}
                    {item}
                    {/accessory}
                </select>
            </div>
            
            <button type="submit" class="btn btn-success">Edit</button>
        </form>
        <button onclick="location.href = '/welcome/';" id="myButton" class="btn btn-danger" >Cancel</button>
    </div>
</div>
