// resources/js/App.js or your main component
import { ChakraProvider, Heading } from '@chakra-ui/react';
import theme from './theme';  // Import your theme

function App() {
  return (
    <ChakraProvider theme={theme}>
      <Heading size={4}>Hello</Heading>
    </ChakraProvider>
  );
}

export default App;
