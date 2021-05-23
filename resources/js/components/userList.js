import React from 'react';
import ReactDOM from 'react-dom';

class UserList extends React.Component {
    render() {
        return (
            <div>
                <h3>Here users table</h3>
                <UserData />
            </div>

        );
    }
}

class UserData extends React.Component {
    render() {
        return (
            <p>'Row with user data'</p>
        );
    }
}

if (document.getElementById('userList')) {
    ReactDOM.render(
        <UserList />,
        document.getElementById('userList')
    );
}
