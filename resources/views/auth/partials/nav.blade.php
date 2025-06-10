<nav class="navbar navbar-expand-lg" style="background-color: #8b5a2b;">
            <button class="btn btn-sm" id="alternarColorBtn" type="button" style="background-color: #d4af37; color: #8b5a2b;">🌓 Alternar </button>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <span style="color: #d4af37;">&nbsp;&nbsp;&nbsp;📅 {{ \Carbon\Carbon::now()->format('d/m/Y') }}</span>
        <span style="color: #d4af37;" id="live-clock">&nbsp;&nbsp;&nbsp;</span>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
            function updateClock() {
                const now = new Date();
                const h = String(now.getHours()).padStart(2, '0');
                const m = String(now.getMinutes()).padStart(2, '0');
                const s = String(now.getSeconds()).padStart(2, '0');
                document.getElementById('live-clock').textContent = ` 🕒 ${h}:${m}:${s}`;
            }
            updateClock();
            setInterval(updateClock, 1000);
            });
        </script>

        <form class="ml-auto" action="{{ route('logout') }}" method="GET" style="margin-left: auto;">
            @csrf
            @if(auth()->check())
                <span style="color: #d4af37; margin-right: 10px;">👤 Bienvenido/a {{ auth()->user()->usuario }}</span>
            @endif
            <button type="submit" class="btn btn-warning" id="salida" style="color: #8b5a2b;">Log Out</button>
        </form>
    </div>
</nav>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const toggleBtn = document.querySelector(".navbar-toggler");
        const menu = document.getElementById("navbarNav");

        toggleBtn.addEventListener("click", function () {
            menu.classList.toggle("show");
        });
    });
</script>
<script type="module" src="{{asset('js/changeColor.js')}}"></script>
