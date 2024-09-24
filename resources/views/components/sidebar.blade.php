<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active"> <a href="index.html"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
                <li class="list-divider"></li>
                <li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{route('bookings')}}"> All Booking </a></li>
                        
                        
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Messages </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{route('all_messages')}}"> All Messages  </a></li>
                        {{-- <li><a href="edit-customer.html"> Edit User </a></li>
                        <li><a href="add-customer.html"> Add user </a></li> --}}
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-book"></i> <span> Books </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{route('books.index')}}">All Bookss </a></li>
                        {{-- <li><a href="{{route('books.edit')}}"> Edit Bookss </a></li> --}}
                        <li><a href="{{route('books.create')}}"> Add Books </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-calendar-alt"></i> <span> Category </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{route('categories.index')}}">All Category </a></li>
                        {{-- <li><a href="{{route('edit')}}"> Edit Category</a></li> --}}
                        <li><a href="{{route('categories.create')}}"> Add Category </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-calendar-alt"></i> <span> Gallery </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ route('photo') }}" >All Gallery </a></li>
                        
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>