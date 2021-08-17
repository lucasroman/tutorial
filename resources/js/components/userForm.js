import React from 'react';
import ReactDOM from 'react-dom';

class UserForm extends React.Component {
    render() {
        return (
            <form action="/users" method="post">
                <div className="row mb-3">
                    <div className="form-group col">
                        <label htmlFor="firstName" className="form-label">
                            First name
                        </label>
                        <input type="text" className="form-control"
                             name="firstName" id="firstName"/>
                    </div>

                    <div className="form-group col">
                        <label htmlFor="lastName" className="form-label">
                            Last name
                        </label>
                        <input type="text" className="form-control" name="lastName" id="lastName"/>
                    </div>
                </div>

                <div className="form-group mb-3">
                    <label htmlFor="email" className="form-label">Email</label>
                    <input type="email" className="form-control"
                        name="email" id="email"/>
                </div>

                <input type="submit" value="Create User"
                    className="btn btn-primary mb-3" />
            </form>
        );
    }
}

if (document.getElementById('userForm')) {
    ReactDOM.render(
        <UserForm />,
        document.getElementById('userForm')
    );
}
