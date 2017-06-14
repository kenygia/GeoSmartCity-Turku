#!/usr/local/rvm/rubies/ruby-2.4.0/bin/ruby -w

def make_php_doc

end

def make_js_doc

end


def file_processing(filenames)
    #puts filenames
    found = []
    filenames.each  do |item|
        filename = "#{item}"
        if File.file?(filename)
            found += File.foreach(filename).grep(/^function/)
            found += File.foreach(filename).grep(/public/)
            puts found
        end
        if File.directory?(filename)
            puts "dir"
        end
    end
end

file_routing_js = Dir["./javascript/*.js"]
file_comments_js = Dir["./coments/**/*.js"]
file_comments_php = Dir["./comments/**/*.php"]

file_processing(file_comments_js)
file_processing(file_routing_js)
file_processing(file_comments_php)