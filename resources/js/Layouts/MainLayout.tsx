import {PropsWithChildren} from 'react';
import Navigation from "@/Components/Navigation";

export default function MainLayout({children}: PropsWithChildren) {
    return (
        <div>
            <Navigation/>
            <div className={'flex flex-row h-screen'}>
                <div>
                    sidebar
                </div>
                <div className={'container'}>
                    {children}
                </div>
            </div>
        </div>
    )
}
