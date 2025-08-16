import React, { useState } from 'react';
import { ThemeProvider } from 'styled-components';
import { lightTheme } from './themes/light';
import { darkTheme } from './themes/dark';
import Header from './components/Header';
import AdminPage from './components/AdminPage';
import ThemeSwitcher from './components/ThemeSwitcher';

const App = () => {
    const [theme, setTheme] = useState(lightTheme);

    const toggleTheme = () => {
        setTheme(prevTheme => (prevTheme === lightTheme ? darkTheme : lightTheme));
    };

    return (
        <ThemeProvider theme={theme}>
            <Header />
            <ThemeSwitcher toggleTheme={toggleTheme} />
            <AdminPage />
        </ThemeProvider>
    );
};

export default App;