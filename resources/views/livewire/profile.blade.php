<form wire:submit.prevent="updateprofile">
    <label for="">Name</label><br><br>
    <input type="text" wire:model.defer="user.name">
    <button wire:click="checkname" type="button">Check Name</button>
    <br><br>
    @if($errors->has('user.name')) <p style="color:red">{{ $errors->first('user.name') }}</p> @endif
    <label for="">Email</label><br><br>
    <input type="text" wire:model.defer="user.email"><br><br>
    @if($errors->has('user.email')) <p style="color:red">{{ $errors->first('user.email') }}</p> @endif
    <input type="submit" value="Send">
    @if($success)
        <p>
            Successfully Updated!
        </p>
    @endif
</form>
