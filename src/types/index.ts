export interface Theme {
    backgroundColor: string;
    textColor: string;
    buttonColor: string;
}

export interface Props {
    theme: Theme;
    toggleTheme: () => void;
}