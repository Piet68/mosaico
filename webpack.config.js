module.exports = {
    entry: {
        app:'./app/backend-php/main.js'
    },
    module: {
        rules: [
            {
                test: /\.css$/,
                use: ['style-loader', 'postcss-loader'],
            },
            {
                test: /\.jsx?$/,
                use: ['babel-loader', 'astroturf/loader'],
            }
        ]
    }
}
