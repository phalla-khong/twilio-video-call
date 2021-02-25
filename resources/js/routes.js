import Hello from './views/Hello';
import Home from './views/Home';
import Example from './components/ExampleComponent';

export const routes = [
    {
        path: '/vue',
        name: 'home',
        component: Home
    },
    {
        path: '/vue/hello',
        name: 'hello',
        component: Hello
    },
    {
        path: '/vue/example',
        name: 'example',
        component: Example
    },
];
