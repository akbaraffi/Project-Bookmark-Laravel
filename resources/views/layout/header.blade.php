<header class="flex fixed top-0 w-full justify-between items-center p-4 bg-slate-950 text-white gap-3">
    <a href="{{ url('/') }}" class="flex items-center font-bold gap-2">
        <i class="fa-solid fa-bookmark"></i>
        <p>Kazu Bookmark</p>
    </a>
<ul class="flex gap-4 pr-5 font-medium">
    <li><a href="{{ url('/') }}" class="hover:text-gray-300 transition">Home</a></li>
    <li><a href="{{ url('/table') }}" class="hover:text-gray-300 transition">Bookmark</a></li>
    <!--<li><a href="{{ url('/login') }}" class="bg-amber-50 text-black px-3 py-1 rounded-lg hover:bg-gray-400 hover:text-white transition">Login</a>
    </li>-->
</ul>

</header>