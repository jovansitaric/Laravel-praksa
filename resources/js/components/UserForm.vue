<template>
    <form>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" />
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" id="email" />
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" />
        </div>

        <div class="form-group">
            <label for="c_password">Repeat password</label>
            <input type="password" name="c_password" id="c_password" />
        </div>

        <button type="submit" class="btn btn-primary">Send message</button>
    </form>
</template>