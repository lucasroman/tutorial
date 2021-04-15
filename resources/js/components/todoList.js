import React from 'react';
import ReactDOM from 'react-dom';

class TodoApp extends React.Component {
    render() {
        return ('Text from TodoApp component');
    }
}

if (document.getElementById('todoList')) {
    ReactDOM.render(<TodoApp />, document.getElementById('todoList') );
}
