import React, { useState } from 'react';
import { lightTheme } from '../themes/light';
import { darkTheme } from '../themes/dark';

const ThemeSwitcher: React.FC = () => {
    const [isDarkTheme, setIsDarkTheme] = useState(false);

    const toggleTheme = () => {
        setIsDarkTheme(!isDarkTheme);
        const theme = !isDarkTheme ? darkTheme : lightTheme;
        applyTheme(theme);
    };

    const applyTheme = (theme: any) => {
        Object.keys(theme).forEach(key => {
            document.documentElement.style.setProperty(`--${key}`, theme[key]);
        });
    };

    return (
        <button onClick={toggleTheme}>
            Switch to {isDarkTheme ? 'Light' : 'Dark'} Theme
        </button>
    );
};

export default ThemeSwitcher;