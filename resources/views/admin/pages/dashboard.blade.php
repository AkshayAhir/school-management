<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h1>Hello Welcome My Webisite !Bro</h1>
    </body>
</html>

<nav class="page-header">
    <div class="header-content">
        @if (Auth::guard('admin')->check() && request()->is('admin/*'))
            <div class="dropdown admin-menu">
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/admin/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
        @endif
    </div>
</nav>