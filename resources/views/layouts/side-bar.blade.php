<div class="sidebar">
    <h4 class="text-center">Admin Panel</h4>
    <hr>
    <a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a href="{{ route('user_index') }}"><i class="fas fa-users"></i> Users</a>
    <a href="{{ route('book_index') }}"><i class="fas fa-book"></i> Books</a>
    <a href="{{ route('tag_index') }}"><i class="fas fa-tags"></i> Tags</a>
    <a href="{{ route('category_index') }}"><i class="fas fa-layer-group"></i> Category</a>
    <a href="{{ route('author_index') }}"><i class="fas fa-user-edit"></i> Authors</a>
    <a href="{{ route('offer_index') }}"><i class="fas fa-percent"></i> Offers</a>
    <a href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>
