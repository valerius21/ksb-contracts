import {Navbar, NavbarBrand, NavbarContent, NavbarItem} from "@nextui-org/react";
import {Button} from "@/Components/ui/button";
import {Link} from "@inertiajs/react";
import {Input} from "@/Components/ui/input";

export default function Navigation() {
    return (
        <Navbar maxWidth={'full'}>
            <NavbarBrand>
                <img src={"/ksb_logo_512.png"} alt="" className={'size-12 p-1'}/>
                <p className={'font-bold text-inherit p-1'}><span
                    className={'font-bold font-serif'}>KSB INTAX DIGITAL</span> <br/> Vertragsdatenbank</p>
            </NavbarBrand>
            <NavbarContent>
                <NavbarItem>
                    <Button variant={'link'}>
                        Alle Vorlagen
                    </Button>
                </NavbarItem>
                <NavbarItem>
                    <Button variant={'link'}>
                        LawLift Vorlagen
                    </Button>
                </NavbarItem>
                <NavbarItem>
                    <Button variant={'link'}>
                        Favoriten
                    </Button>
                </NavbarItem>
            </NavbarContent>
            <NavbarContent justify={'end'}>
                <NavbarItem>
                    <Input placeholder={'Suche'}/>
                </NavbarItem>
                <NavbarItem>
                    <Button variant={'outline'} asChild={true}>
                        <a href={"/admin"}>
                            Admin
                        </a>
                    </Button>
                </NavbarItem>
            </NavbarContent>
        </Navbar>
    )
}
