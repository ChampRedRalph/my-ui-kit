import React from 'react';
import { Link } from 'react-router-dom';
import { useTheme } from '../hooks/useTheme';

const Header: React.FC = () => {
    const { theme } = useTheme();

    return (
        <header style={{ backgroundColor: theme.headerBackground, color: theme.headerText }}>
            <h1>Admin Page</h1>
            <nav>
                <Link to="/settings" style={{ color: theme.linkColor }}>User Settings</Link>
                <Link to="/dashboard" style={{ color: theme.linkColor }}>Dashboard</Link>
            </nav>
        </header>
    );
};

export default Header;