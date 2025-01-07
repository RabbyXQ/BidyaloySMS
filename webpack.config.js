const path = require('path');

module.exports = {
  // Entry point for the application
  entry: './src/index.js', // Adjust this based on your project's entry point

  // Output configuration
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'bundle.js',
  },

  // Module rules
  module: {
    rules: [
      // Add the rule for handling SCSS files
      {
        test: /\.scss$/,
        use: ['style-loader', 'css-loader', 'sass-loader'],
      },
    ],
  },

  // Other Webpack settings (e.g., plugins, devServer, etc.)
};
