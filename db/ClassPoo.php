<?php
    class Login
    {
        public $user = "";
        public $password = "";
        public $usu = "kevin@gmail.com";
        public $pass = "1234";
        public $cadena = "true";
        public $cadena2 = "false";

        function entrarDatos($variable1, $variable2)
        {
            $this -> user = $variable1;
            $this -> password = $variable2;
        }

        function loguear()
        {
            $usu = $this -> usu;
            $ps = $this -> pass;

            $us1 = $this -> user;
            $pas1 = $this -> password;

            if (($usu === $us1) && ($ps === $pas1))
            {
                return $this -> cadena;
            } else
            {
                return $this -> cadena2;
            }
        }
    }

    class Lista
    {
        public $array = [
            "Icons" => array (
                "<a class='list-group-item navbarlist bd-highlight active'><i class='bi bi-grid pe-2'></i>",
                "<a class='list-group-item navbarlist bd-highlight' style='cursor: pointer;' id='ancla'><i class='bi bi-archive pe-2'></i>",
                "<a class='list-group-item navbarlist bd-highlight' style='cursor: pointer;' id='ancla'><i class='bi bi-list-ul pe-2'></i>",
                "<a class='list-group-item navbarlist bd-highlight' style='cursor: pointer;' id='ancla'><i class='bi bi-pie-chart pe-2'></i>",
                "<a class='list-group-item navbarlist bd-highlight' style='cursor: pointer;' id='ancla'><i class='bi bi-cash-coin pe-2'></i>",
                "<a class='list-group-item navbarlist bd-highlight' style='cursor: pointer;' id='ancla'><i class='bi bi-journals pe-2'></i>",
                "<a class='list-group-item navbarlist bd-highlight' style='cursor: pointer;' id='ancla'><i class='bi bi-person pe-2'></i>",
                "<a class='list-group-item navbarlist bd-highlight' style='cursor: pointer;' id='ancla'><i class='bi bi-chat-left pe-2'></i>",
                "<a class='list-group-item navbarlist bd-highlight' style='cursor: pointer;' id='ancla'><i class='bi bi-heart pe-2'></i>",
                "<a class='list-group-item navbarlist bd-highlight' style='cursor: pointer;' id='ancla'><i class='bi bi-gear pe-2'></i>",
                "<a class='list-group-item navbarlist mt-auto bd-highlight' style='cursor: pointer;' id='ancla'><i class='bi bi-box-arrow-left pe-2'></i>"
            ),
            "Text" => array (
                "Dashboard</a>",
                "Product</a>",
                "Order List</a>",
                "Analytics</a>",
                "Stock</a>",
                "Total Order</a>",
                "Team</a>",
                "Messages</a>",
                "Favorites</a>",
                "Settings</a>",
                "Log out</a>"
            )
        ];

        function EnlistarArray(){
            $listaIconos = $this -> array["Icons"];
            $listaTexto = $this -> array["Text"];
            for ($i = 0; $i<=10; $i++) {
                echo "$listaIconos[$i] $listaTexto[$i]";
            }
        }
    }
?>