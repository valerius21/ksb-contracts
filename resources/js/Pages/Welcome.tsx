import {Link, Head} from '@inertiajs/react';
import {PageProps} from '@/types';
import MainLayout from "@/Layouts/MainLayout";

export default function Welcome({auth, laravelVersion, phpVersion}: PageProps<{
    laravelVersion: string,
    phpVersion: string
}>) {
    const handleImageError = () => {
        document.getElementById('screenshot-container')?.classList.add('!hidden');
        document.getElementById('docs-card')?.classList.add('!row-span-1');
        document.getElementById('docs-card-content')?.classList.add('!flex-row');
        document.getElementById('background')?.classList.add('!hidden');
    };

    return (
        <MainLayout>
            <Head title="Welcome"/>
            <h1>Hallo</h1>
        </MainLayout>
    );
}
