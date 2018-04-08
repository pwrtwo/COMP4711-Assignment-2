<div class="container">
    <div class="row">
        <div>
            <h1>Add a set</h1>
        </div>
    </div>

    <div>
        <form action="AddSet" method="post">
            <input type="hidden" name="id" value="{setNum}" />
            <div class="form-group">
                <label for="addName">Name</label>
                <input type="text" name="n"><br>
            </div>

            <div class="form-group">
                <label for="addHelm">Helm</label>
                <select name="h" id="addHelm" class="form-control">
                    <option selected></option>
                    {h}
                    {item}
                    {/h}
                </select>
            </div>
            <div class="form-group">
                <label for="addChest">Chest</label>
                <select name="c" id="addChest" class="form-control">
                    <option selected></option>
                    {c}
                    {item}
                    {/c}
                </select>
            </div>
            <div class="form-group">
                <label for="addPrimary">Primary</label>
                <select name="p" id="addPrimary" class="form-control">
                    <option selected></option>
                    {p}
                    {item}
                    {/p}
                </select>
            </div>
            <div class="form-group">
                <label for="addSecondary">Secondary</label>
                <select name="s" id="addSecondary" class="form-control">
                    <option selected></option>
                    {s}
                    {item}
                    {/s}
                </select>
            </div>


            <button type="submit" class="btn btn-success">Add</button>
        </form>
    </div>
</div>
