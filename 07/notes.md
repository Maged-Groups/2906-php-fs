# Why Prefer Local Variables?

- Encapsulation & Maintainability – Local variables are confined to their function, making code easier to read, debug, and maintain.
- Avoid Unintended Modifications – Global variables can be modified from anywhere, leading to unintended side effects and hard-to-track bugs.
- Improved Performance – PHP does not have to search through the global scope, which can slightly improve execution speed.
- Better Code Reusability – Functions that rely only on local variables can be easily reused without dependency on the global state.

# When to Use Global Variables?

- While local variables are preferred, global variables might be necessary in some cases:
    <p> Configuration settings that need to be accessed throughout the application.</p>
    <p> Session variables ($_SESSION) to maintain user state.</p>
    <p> Constants (define() or const) for values that don’t change.</p>
    <p> Superglobals ($\_POST, $\_GET, $\_SESSION, etc.), which are automatically available everywhere.</p>

  # Alternative to Global Variables
  **_Instead of using global $var; inside functions, consider:_**

- Passing variables as function parameters
- Using static variables inside functions (if persistence is needed)
- Encapsulating variables in classes and using properties/methods
