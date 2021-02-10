class UserForm extends React.Component {
    constructor(props) {
        super(props);
        this.state = {value: ''};
    }

    render() {
        return (
            <form action="#">
                <label>First name: </label><br />
                <input type="text" name="firstName" /><br />

                <label>Last name: </label><br />
                <input type="text" name="lastName" /><br />

                <input type="submit" name="create" />
            </form>
        );
    }
}

ReactDOM.render (
    <UserForm />,
    document.getElementById('userForm')
);
