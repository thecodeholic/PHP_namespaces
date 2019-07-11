<?php
/*
namespace ns1;
class User{}
// traits, functions, interfaces, constants, abstract classes

namespace ns2;
class User{};

namespace ns1\subns1;
class User{};
*/

// Better to have like this

namespace ns1{
    class User{}
}
namespace ns2{
    class User{}
}
namespace ns1\subns1{
    class User{}
}
