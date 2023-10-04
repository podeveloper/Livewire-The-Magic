<form wire:submit.prevent="updateprofile">
    <label for="">Name</label><br><br>
    <input type="text" wire:model="user.name">
    <br><br>
    @if($errors->has('user.name')) <p style="color:red">{{ $errors->first('user.name') }}</p> @endif
    <label for="">Email</label><br><br>
    <input type="text" wire:model="user.email"><br><br>
    @if($errors->has('user.email')) <p style="color:red">{{ $errors->first('user.email') }}</p> @endif
    <input type="submit" value="Send">
    @if($success)
        <p>
            Successfully Updated!
        </p>
    @endif

    <br><br>

    <div>
        <button wire:click.prevent="$set('show', 'true')">Show / Hide</button>
        <br><br>

        @if($show)
            <div>
                Toggle Area
            </div>
        @endif
    </div>


</form>
