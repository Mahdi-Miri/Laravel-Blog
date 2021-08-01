<nav class="navbar navbar-dark bg-dark justify-content-between">
    <a class="navbar-brand ">PROJECT</a>

    <form action="http://127.0.0.1:8000/logout" method="POST">
        @csrf
        <input type="submit" name="logout" value="Logout">
    </form>
</nav>
