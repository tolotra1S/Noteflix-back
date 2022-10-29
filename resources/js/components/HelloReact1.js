// resources/js/components/HelloReact.js

import React from 'react';
import ReactDOM from 'react-dom';

export default function HelloReact() {
    return (
        <div>
            <h1>Hello React!</h1>
            Nom <input type="text"/>
            <br />
            Prénom <input type="text" />
            <br />
            Classe <input type="text" />
            <br />
        </div>
    );
}

if (document.getElementById('hello-react')) {
    ReactDOM.render(<HelloReact />, document.getElementById('hello-react'));
}