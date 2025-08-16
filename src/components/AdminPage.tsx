import React, { useState } from 'react';
import ThemeSwitcher from './ThemeSwitcher';
import Header from './Header';

const AdminPage: React.FC = () => {
    const [theme, setTheme] = useState('light');

    const handleThemeChange = (newTheme: string) => {
        setTheme(newTheme);
    };

    return (
        <div className={`admin-page ${theme}`}>
            <Header />
            <ThemeSwitcher onThemeChange={handleThemeChange} />
            <h1>Admin Page</h1>
            <section>
                <h2>User Settings</h2>
                {/* Additional user settings management components can be added here */}
            </section>
            <section>
                <h2>Current Theme: {theme}</h2>
            </section>
        </div>
    );
};

export default AdminPage;