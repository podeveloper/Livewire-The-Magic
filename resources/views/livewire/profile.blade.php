<form wire:submit.prevent="updateprofile">
    <label for="">Name</label><br><br>
    <input type="text" wire:model="name"><br><br>
    <label for="">Email</label><br><br>
    <input type="text" wire:model="email"><br><br>
    <input type="submit" value="Send">
    @if($success)
        <p>
            Successfully Updated!
        </p>
    @endif
</form>
