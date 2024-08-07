import {PropsWithChildren} from 'react';
import {Navbar, NavbarBrand} from "@nextui-org/react";

export default function MainLayout({children}: PropsWithChildren) {
    return (
        <div className={'flex flex-col size-full'}>
            <Navbar>
                <NavbarBrand>
                    <img src={"https://picsum.photos/300/300"} alt=""/>
                    <p className={'font-bold text-inherit'}>KSB INTAX DIGITAL Vertragsdatenbank</p>
                </NavbarBrand>
            </Navbar>
            <div className={'container'}>
                {children}
            </div>
        </div>
    )
}
