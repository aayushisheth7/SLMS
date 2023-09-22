const antd = window.antd;

const Login = () => {
  const onFinish = values => {
    console.log('Success:', values);
  };

  const onFinishFailed = errorInfo => {
    console.log('Failed:', errorInfo);
  };

  return /*#__PURE__*/(
    React.createElement("div", { className: "login-page" }, /*#__PURE__*/
    React.createElement("div", { className: "login-box" }, /*#__PURE__*/
    React.createElement("div", { className: "illustration-wrapper" }, /*#__PURE__*/
    React.createElement("img", { src: "/src/img/pic/mixkit-left-handed-man-sitting-at-a-table-writing-in-a-notebook-27-original-large.avif", alt: "Login" })), /*#__PURE__*/

    React.createElement(antd.Form, {
      name: "login-form",method:"POST",action:"/src/php/login.php",
      initialValues: { remember: true },
      onFinish: onFinish,
      onFinishFailed: onFinishFailed }, /*#__PURE__*/

    React.createElement("p", { className: "form-title" }, "Welcome back"), /*#__PURE__*/
    React.createElement("p", null, "Login to the Dashboard"), /*#__PURE__*/
    React.createElement(antd.Form.Item, {
      name: "username",
      rules: [{ required: true, message: 'Please input your username!' }] }, /*#__PURE__*/

    React.createElement(antd.Input, {
      placeholder: "Username" })), /*#__PURE__*/



    React.createElement(antd.Form.Item, {
      name: "password",
      rules: [{ required: true, message: 'Please input your password!' }] }, /*#__PURE__*/

    React.createElement(antd.Input.Password, {
      placeholder: "Password" })), /*#__PURE__*/



    React.createElement(antd.Form.Item, { name: "remember", valuePropName: "checked" }, /*#__PURE__*/
    React.createElement(antd.Checkbox, null, "Remember me")), /*#__PURE__*/

    
    
    React.createElement(antd.Form.Item, null, /*#__PURE__*/
    React.createElement(antd.Button, { type: "primary", htmlType: "submit", className: "login-form-button" }, "LOGIN")),
    React.createElement("a",{href: "/signup.html", className:"create"},"Create account"),
    ))));







};

ReactDOM.render( /*#__PURE__*/
React.createElement(Login, null),
document.getElementById('root'));