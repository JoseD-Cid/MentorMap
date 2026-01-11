<svg class="mentor-map-logo {{ $phase }} w-full h-auto {{ $class }}" viewBox="0 0 600 840"
    xmlns="http://www.w3.org/2000/svg">
    <path id="upper-ring" class="logo-ring" fill="currentColor"
        d="M 300.00007,0 A 299.99996,299.99996 0 0 0 0,300.00007 299.99996,299.99996 0 0 0 48.075721,462.89302 82.500053,82.500053 0 0 1 130.2943,387.20513 a 82.500053,82.500053 0 0 1 12.79776,0.99843 179.99996,179.99996 0 0 1 -23.09195,-88.20349 179.99996,179.99996 0 0 1 179.99996,-179.99996 179.99996,179.99996 0 0 1 179.99997,179.99996 179.99996,179.99996 0 0 1 -23.09196,88.20349 82.500053,82.500053 0 0 1 12.79776,-0.99843 82.500053,82.500053 0 0 1 82.21815,75.68789 A 299.99996,299.99996 0 0 0 599.99971,300.00007 299.99996,299.99996 0 0 0 300.00007,0 Z" />

    <path id="l-leg" class="logo-m" fill="currentColor"
        d="M 70.294028,526.37728 V 779.9997 c 0,33.24 26.759849,60.0003 59.999832,60.0003 33.24,0 60.00029,-26.7603 60.00029,-60.0003 V 646.37782 Z" />

    <path id="r-leg" class="logo-m" fill="currentColor"
        d="M 529.70569,526.37773 409.70557,646.37827 V 779.9997 c 0,33.24 26.7603,60.0003 60.00029,60.0003 33.23999,0 59.99983,-26.7603 59.99983,-60.0003 z" />

    <path id="upper-m" class="logo-m" fill="currentColor"
        d="m 130.2943,409.70512 c -33.137133,-1.5e-4 -60.000191,26.86271 -60.000272,59.99984 0.0021,15.91226 6.321097,31.17584 17.573849,42.42642 70.696143,70.70377 141.424113,141.42421 212.132193,212.13235 L 512.13196,512.13185 c 11.25239,-11.25231 17.57385,-26.51379 17.57373,-42.427 -9e-5,-33.13698 -26.86287,-59.99977 -59.99985,-59.99984 -15.91081,0.006 -31.17909,6.32036 -42.42654,17.57419 -42.42608,42.42673 -84.85272,84.8529 -127.27923,127.27921 C 257.53027,512.1805 215.20651,469.61892 172.72046,427.27881 161.47088,416.02609 146.20597,409.7085 130.2943,409.70512 Z" />
</svg>

<style>
    /* Definir colores por fase */
    .mentor-map-logo.color {
        --ring: #2563eb;
        --m: #2eb830;
    }

    .mentor-map-logo.white {
        --ring: #ffffff;
        --m: #ffffff;
    }

    .mentor-map-logo.black {
        --ring: #2C2C2C;
        --m: #2C2C2C;
    }

    /* Aplicar colores con transiciones */
    .mentor-map-logo .logo-ring {
        fill: var(--ring);
        transition: fill 0.3s ease-out, filter 0.15s ease-out;
    }

    .mentor-map-logo .logo-m {
        fill: var(--m);
        transition: fill 0.3s ease-out, filter 0.15s ease-out;
    }

    /* Active states - oscurecer color y white */
    .mentor-map-logo.color .logo-ring:active,
    .mentor-map-logo.color .logo-m:active,
    .mentor-map-logo.white .logo-ring:active,
    .mentor-map-logo.white .logo-m:active {
        filter: brightness(0.90);
    }

    /* Active state - aclarar black */
    .mentor-map-logo.black .logo-ring:active,
    .mentor-map-logo.black .logo-m:active {
        filter: brightness(1.5);
    }
</style>
