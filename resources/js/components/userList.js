import React from 'react';
import ReactDOM from 'react-dom';

class UserList extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            users: JSON.parse(container.dataset.users),
        };
    }

    render() {
        // Get amount of users in database
        let usersInDatabase= _.size(this.state.users)
        // If there are users will show a users table
        if (usersInDatabase > 0) {
            return(<UserTable users={users} />);
        // If there are not users will show a message and buttons
        } else {
            return(<ThereAreNotUsers />);
        }
    }
}

var container = document.getElementById('userList');
const users = [];

if (container) {
    ReactDOM.render(
        <UserList users={users} />,
        container
    );
}

// -----------------------------------------------------------------------------

// Users table: make the users table
function UserTable(props) {
    const users = JSON.parse(container.dataset.users);

    return(
        <table className="table table-dark table-responsive-sm">
            <caption>List of users in a React component</caption>
            <thead>
            <tr>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>
                {users.map((user) =>
                    // IMPORTANT: keys go here, in the array context
                    <UserRow key={user.id} user={user} />
                )}
            </tbody>
        </table>
    );
}

// User row table: return only one row of users table
function UserRow(props) {
    return(
        <tr>
            {/*
                Don't put keys here, they go in the array context,
                it's to say, in the array loop
            */}
            <td>{props.user.last_name}</td>
            <td>{props.user.first_name}</td>
            <td>{props.user.email}</td>
        </tr>
    );
}

// When a section have not users you can show this component
function ThereAreNotUsers() {
    return(
        <div className="text-center">
            <h3>There are no users.</h3>
            <a href="/" className="btn btn-primary m-2">
                Back Home
            </a>
            <a href="/users/create" className="btn btn-primary">
                Create User
            </a>
        </div>
    );
}
